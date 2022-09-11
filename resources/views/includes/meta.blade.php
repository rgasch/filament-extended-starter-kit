<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('author', setting('site_description'))">
<meta name="description" content="@yield('author', setting('site_description'))">
<meta name="author" content="@yield('author', setting('site_author'))">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{url()->current()}}" />
<title>@yield('title', setting('site_name'))</title>

<meta property="og:type" content="@yield('type', 'website')" />
<meta property="og:title" content="@yield('title', setting('site_name'))" />
<meta property="og:description" content="@yield('author', setting('site_description'))" />
<meta property="og:image" content="@yield('image', url(setting('site_profile')))" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="{{setting('site_name')}}" />

<meta name="twitter:title" content="@yield('title', setting('site_name'))">
<meta name="twitter:description" content="@yield('author', setting('site_description'))">
<meta name="twitter:image" content="@yield('image', url(setting('site_profile')))">
<meta name="twitter:site" content="{{'@'.setting('social_twitter')}}">
<meta name="twitter:creator" content="{{'@'.setting('social_twitter')}}">
