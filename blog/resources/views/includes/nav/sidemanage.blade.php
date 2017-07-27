<?php
$url = Request::route()->getName();
?>

<aside class="menu">

  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{route('manage.dashboard')}}" @if($url == 'manage.dashboard') class="is-active" @endif><b-icon icon="dashboard"></b-icon> Dashboard</a></li>
    <li><a href="{{route('users.index')}}"@if($url == 'users.index') class="is-active" @endif><b-icon icon="person"></b-icon> Users</a></li>
  </ul>

  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li>
      <a>Manage Auth</a>
      <ul>
        <li><a><b-icon icon="lock"></b-icon> Permission</a></li>
        <li><a><b-icon icon="vpn_key"></b-icon> Role</a></li>
      </ul>
    </li>
  </ul>

</aside>