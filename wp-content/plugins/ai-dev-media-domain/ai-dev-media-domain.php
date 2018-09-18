<?php

/**
 * Plugin Name: AI Dev Media Domain
 * Description: Load media files from a media server, if MEDIA_DOMAIN is defined in wp-config.
 * Version: 0.1
 * Author: Paul Pullen
 */

add_filter( 'wp_get_attachment_url', 'ai_dev_get_attachment_url' );

/**
 * Rewrite the media's attachment url to point to the MEDIA_DOMAIN defined in wp-config.php if:
 * 1. MEDIA_DOMAIN is indeed defined AND
 * 2. The file was does not exist locally
 *
 * @param string $url
 * @return string
 */
function ai_dev_get_attachment_url($url) {

    //if !MEDIA_DOMAIN OR attachment exists locally, return the unmodified url
    if(! defined('MEDIA_DOMAIN') || ai_dev_attachment_exists_locally($url)) {
        return $url;
    }

    if(is_multisite()) {
        //replace current site url (xxx.dev or whatever) with the MEDIA_DOMAIN/site_basename/xxxx
        $site_basename = basename(get_site_url());
        return str_replace(get_site_url(), "http://" . MEDIA_DOMAIN . '/' . $site_basename, $url);
    }

    //just replace the site url with the stage domain
    return str_replace(get_site_url(), "http://" . MEDIA_DOMAIN, $url);
}

add_filter( 'wp_get_attachment_image_attributes', 'ai_dev_get_srcset_attr' );

/**
 * Same as ai_dev_get_attachment_url, but for the srcset attribute
 *
 * @param array $attr
 * @return array
 */
function ai_dev_get_srcset_attr($attr) {

    if(! defined('MEDIA_DOMAIN')) {
        return $attr;
    }

    if(isset($attr['srcset'])) {

        $urls = explode(',' , $attr['srcset']);

        foreach($urls as &$url){
            $url = preg_replace('/ \d+w$/', '', $url);
        }
        unset($url);

        //if attachment exists locally, do not rewrite srcset
        if(!empty($urls[0]) && ai_dev_attachment_exists_locally($urls[0])) {
            return $attr;
        }

        if(is_multisite()) {
            $site_basename = basename(get_site_url());
            $attr['srcset'] = str_replace(get_site_url(), "http://" . MEDIA_DOMAIN . '/' . $site_basename, $attr['srcset']);
        }

        $attr['srcset'] = str_replace(get_site_url(), "http://" . MEDIA_DOMAIN, $attr['srcset']);
    }

    return $attr;
}

/**
 * Check if the attachment exists in the local uploads folder
 *
 * @param $url
 * @return bool
 */
function ai_dev_attachment_exists_locally($url)
{
    /**
     * Example returned from wp_upload_dir
     * array(6) {
     * ["path"]=> string(55) "/var/www/powermag.dev/public/wp-content/uploads/2017/03"
     * ["url"]=> string(46) "http://powermag.dev/wp-content/uploads/2017/03"
     * ["subdir"]=> string(8) "/2017/03"
     * ["basedir"]=> string(47) "/var/www/powermag.dev/public/wp-content/uploads"
     * ["baseurl"]=> string(38) "http://powermag.dev/wp-content/uploads" ["error"]=> bool(false) }
     *
     * example url:
     * "http://powermag.dev/wp-content/uploads/2013/08/520004de6672f-080113_CS_Plant_PoYSplash.jpg"
     **/
    $uploads = wp_upload_dir();

    $folders_and_file = str_replace($uploads['baseurl'], '', $url); // leave just the url part after http://...uploads

    $full_path = "{$uploads['basedir']}{$folders_and_file}";

    return @file_exists($full_path);
}