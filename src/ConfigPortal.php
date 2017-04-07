<?php
/*
 * PoiXson phpPortal - Website Utilities Library
 * @copyright 2004-2017
 * @license GPL-3
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\phpPortal;

use pxn\phpUtils\Config;
use pxn\phpUtils\Defines;


class ConfigPortal {
	private function __construct() {}

	const CONFIG_GROUP = DefinesPortal::KEY_CONFIG_GROUP_PORTAL;

	const PAGE_NAME       = DefinesPortal::KEY_CFG_PAGE;

	const TWIG_CACHE_PATH = DefinesPortal::KEY_CFG_TWIG_CACHE_PATH;
	const CACHER_PATH     = DefinesPortal::KEY_CFG_CACHER_PATH;

	const FAILED_PAGE = DefinesPortal::KEY_CFG_FAILED_PAGE;
	const SITE_TITLE  = DefinesPortal::KEY_CFG_SITE_TITLE;
	const FAV_ICON    = DefinesPortal::KEY_CFG_FAV_ICON;

	protected static $cfg = NULL;



	public static function init() {
		if (self::$cfg != NULL) {
			return FALSE;
		}
		self::$cfg = Config::get(DefinesPortal::KEY_CONFIG_GROUP_PORTAL);

		// page name
		self::$cfg->setValidHandler(self::PAGE_NAME, 'string');

		// twig cache path
		self::$cfg->setValidHandler(self::TWIG_CACHE_PATH, 'string');

		// cacher path
		self::$cfg->setValidHandler(self::CACHER_PATH, 'string');

		// failed page
		self::$cfg->setValidHandler(self::FAILED_PAGE, 'string');

		// site title
		self::$cfg->setValidHandler(self::SITE_TITLE, 'string');

		// fav icon
		self::$cfg->setValidHandler(self::FAV_ICON, 'string');

		return TRUE;
	}



	// page name
	public static function getPage() {
		return self::$cfg->getString(
			self::PAGE_NAME
		);
	}
	public static function setPage($pageName) {
		self::$cfg->setValue(
			self::PAGE_NAME,
			$pageName
		);
	}
	public static function setPageDefault($value) {
		self::$cfg->setDefault(
			self::PAGE_NAME,
			$value
		);
	}
	public static function setPageRef(&$value) {
		self::$cfg->setRef(
			self::PAGE_NAME,
			$value
		);
	}



	// twig cache path
	public static function getTwigCachePath() {
		return self::$cfg->getString(
			self::TWIG_CACHE_PATH
		);
	}
	public static function setTwigCachePath($path) {
		self::$cfg->setValue(
			self::TWIG_CACHE_PATH,
			$path
		);
	}



	// cacher path
	public static function getCacherPath() {
		return self::$cfg->getString(
			self::CACHER_PATH
		);
	}
	public static function setCacherPath($path) {
		self::$cfg->setValue(
			self::CACHER_PATH,
			$path
		);
	}



	// failed page
	public static function getFailedPage() {
		return self::$cfg->getString(
			self::FAILED_PAGE
		);
	}
	public static function setFailedPage($page) {
		self::$cfg->setValue(
			self::FAILED_PAGE,
			$page
		);
	}



	// site title
	public static function getSiteTitle() {
		return self::$cfg->getString(
			self::SITE_TITLE
		);
	}
	public static function setSiteTitle($title) {
		self::$cfg->setValue(
			self::SITE_TITLE,
			$title
		);
	}



	// fav icon
	public static function getFavIcon() {
		return self::$cfg->getString(
			self::FAV_ICON
		);
	}
	public static function setFavIcon($favicon) {
		self::$cfg->setValue(
			self::FAV_ICON,
			$favicon
		);
	}



}