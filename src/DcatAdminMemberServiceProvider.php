<?php

namespace ErNine/DcatAdminMember;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatAdminMemberServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
