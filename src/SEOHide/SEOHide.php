<?php

  class SEOHide {

    static protected $hash;
    static protected $pattern = array("/^\\/+/", "/\\/+$/");
    static protected $replace = array("", "");

    public static function link($title, $href, $attr = '') {
      $md5    = md5($href);
      $base64 = base64_encode($href);

      self::save_to_hash($md5, $base64);

      self::print_link($title, $md5, $attr);
    }

    public static function print_javascript() {
      ?>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="/assets/js/base64.js"></script>
      <script type="text/javascript">
        (function($){
          var links_hash = <?=self::get_hash_json()?>;

          var get_link = function (hash) {
            return typeof links_hash[hash] != 'undefined' ? Base64.decode(links_hash[hash]) : '#';
          };

          $('[data-type="href"]').each(function (index, value) {
            $(this).attr('href', get_link($(this).attr('data-hash')));
          });
        })(jQuery)
      </script>
      <?
    }

    private static function save_to_hash($md5, $base64) {
      self::$hash[$md5] = $base64;
    }

    private static function print_link($title, $md5, $attr = '') {
      echo "<a {$attr} data-type='href' data-hash='{$md5}' href='#'>{$title}</a>";
    }

    private static function get_hash_json() {
      return json_encode(self::$hash);
    }
  }

  function seohide_link($title, $href, $attr = '') {
    SEOHide::link($title, $href, $attr);
  }

  function seohide_print_javascript() {
    SEOHide::print_javascript();
  }