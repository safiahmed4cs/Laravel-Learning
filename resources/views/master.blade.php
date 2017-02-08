@extends('layouts.master')

@section('content')
	<div id="app" class="tabs">
        <div class="routers">
            <router-link to='/dashboard' exact>Home</router-link>
            <router-link to='/about'>About</router-link>
            <router-link to='/blog'>Blog</router-link>
            <router-link to='/user'>User</router-link>
            <router-link to='/tokens'>Tokens</router-link>
            <router-link to='/project/create'>Form</router-link>
            <router-link to='/task/create'>Task</router-link>
            <a href="/workflow">Workflow</a>
            <router-view></router-view>
        </div>
    </div>
@endsection

