<?php

class Hooks_boilerplate extends Hooks
{

	/**
	 * This method gets called when:
	 * - /TRIGGER/boilerplate/method_name is visited
	 * - an addon calls Hook::run('boilerplate', 'method_name');
	 *
	 * It follows the format of:
	 * [add on name]__[method name]
	 **/
	public function boilerplate__method_name()
	{
	}

	/**
	 * This is an example of how you can hook into *other* add-ons
	 * or aspects of Statamic.
	 *
	 * The control panel runs the 'add_to_head' method when it builds
	 * the <head> of the pages. You can use this to add your own
	 * CSS to a CP page.
	 **/
	public function control_panel__add_to_head()
	{
		return $this->css->link('boilerplate.css');
	}

}