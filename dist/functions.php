<?php

// セットアップ
// --------------------------------------------------------------------------
function my_setup()
{
  add_theme_support('editor-styles');
  add_editor_style('');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'style',
    'search-form',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// ファイル読み込み
// --------------------------------------------------------------------------
function my_script_init()
{
  $timestamp = date('YmdHi');
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap', array(), NULL, 'all');
  wp_enqueue_style('base', get_template_directory_uri() . '/css/style.css', array(), 1.0, 'all');
  wp_enqueue_script('base', get_template_directory_uri() . '/js/main.js', array(), 1.0, true);
  wp_deregister_script('jquery');

  // if (is_single()) {
  //   wp_enqueue_style('editor', get_template_directory_uri() . '', array(), 1.0, 'all');
  //   wp_enqueue_script('editor', get_template_directory_uri() . '', array(), 1.0, 'all');
  // }
  if (is_page('contact')) {
    wp_enqueue_script('contact', get_template_directory_uri() . './js/contact.js', array(), NULL, true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

// jsファイルにtype属性付与
// --------------------------------------------------------------------------
function add_type_attribute($tag)
{
  $tag = str_replace('text/javascript', 'module', $tag);
  return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

// 検索結果から固定ページを除外する
// --------------------------------------------------------------------------
function my_posts_search($search, $wp_query)
{
  //検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
  if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
    // 検索結果を投稿タイプに絞る
    $search .= " AND post_type = 'post' ";
    return $search;
  }
  return $search;
}
add_filter('posts_search', 'my_posts_search', 10, 2);


// アーカイブページでカテゴリーとタグ情報の取得
// --------------------------------------------------------------------------
function get_current_term()
{
  if (is_category()) {
    $tax_slug = "category";
    $id = get_query_var('cat');
  } else if (is_tag()) {
    $tax_slug = "post_tag";
    $id = get_query_var('tag_id');
  }
  return get_term($id, $tax_slug);
}


// 管理バーの非表示
// --------------------------------------------------------------------------
add_filter('show_admin_bar', '__return_false');
