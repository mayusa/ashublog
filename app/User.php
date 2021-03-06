<?php

namespace App;

use Jcc\LaravelVote\Vote;
use App\Traits\FollowTrait;
use App\Scopes\StatusScope;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes, FollowTrait, Vote;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'name',
        'nickname',
        'real_name',
        'avatar',
        'confirm_code',
        'openid', // wechat
        'github_id',
        'github_name',
        'github_url',
        'weibo_name',
        'weibo_link',
        'website',
        'description',
        'is_admin',
        'status',
        'email_notify_enabled',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'confirm_code',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StatusScope());
    }

    /**
     * Get the discussions for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discussions()
    {
        return $this->hasMany(Discussion::class)->orderBy('created_at', 'desc');
    }

    /**
     * Get the comments for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }

    /**
     * Get the avatar and return the default avatar if the avatar is null.
     *
     * @param  string $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return isset($value) ? $value : config('blog.default_avatar');
    }

    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        if (auth()->id() != $this->id && $this->email_notify_enabled == 'yes' && config('blog.mail_notification')) {
            return $this->email;
        }
    }

    // helper: file
    public function removeCurrentProfilePic($user)
    {
        if ($user->avatar != '') {
            $url = $user->avatar;
            $fileName = explode('/', $url);
            $fileName = $fileName[count($fileName) - 1];
            if (file_exists(public_path('uploads/avatar/') . $fileName)) {
                unlink(public_path('uploads/avatar/') . $fileName);
            }
        }
    }
}
