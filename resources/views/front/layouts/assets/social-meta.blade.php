<!--
https://moz.com/blog/meta-data-templates-123
https://searchenginewatch.com/2016/05/16/how-to-write-meta-title-tags-for-seo-with-good-and-bad-examples/
https://searchenginewatch.com/2016/01/21/seo-basics-22-essentials-you-need-for-optimizing-your-site/
http://ogp.me/
http://secretsaucehq.com/blog/social-media/the-ultimate-guide-to-social-media-meta-tags/
-->
<!--<html itemscope itemtype="http://schema.org/Article">-->

<!-- Place this data between the <head> tags of your website -->
<title>{{$target->html_title}}</title>
<meta name="description" content="{{str_limit($target->social_desc,150)}}" />
<!--Page description. No longer than 155 characters.-->
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{$target->title}}">
<meta itemprop="description" content="{{$target->description}}">
<meta itemprop="image" content="{{$target->social_img}}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Salbuchi">
<meta name="twitter:title" content="{{$target->title}}">
<meta name="twitter:description" content="{{str_limit($target->description,200)}}">
<meta name="twitter:creator" content="@Salbuchi">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{$target->social_img}}">

<!-- Open Graph data -->
<meta property="og:title" content="{{$target->title}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{$target->getFullUrl()}}" />
<meta property="og:image" content="{{$target->social_img}}" />
<meta property="og:description" content="{{$target->social_description}}" />
<meta property="og:site_name" content="http://www.proyectosegundarepublica.com.ar" />
<meta property="article:published_time" content="{{$target->date}}" />
<meta property="article:modified_time" content="{{$target->updated_at}}" />
@if(!empty($data['section']))<meta property="article:section" content="{{$section->title}}" />@endif
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" />
