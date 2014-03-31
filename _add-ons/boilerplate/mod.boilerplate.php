<?php

class Modifier_boilerplate extends Modifier
{

	/**
	 * This is called when using a modifier in your template.
	 * There's only one modifier per add-on, and the modifier is the name
	 * of the add-on. In this case, it's `boilerplate`.
	 * ie. {{ my_var|boilerplate }}
	 *
	 * $value is the value of {{ my_var }}
	 *
	 * You can pass parameters to your modifier by adding a colon and a value.
	 * ie. {{ my_var|boilerplate:2 }}
	 * $parameters[0] is whatever is after the colon. (in this case it would be `2`)
	 *
	 * Whatever you return in here will be output back to the tag, and would be
	 * ready for display in the template, or would be the $value for another modifier
	 * if there was another in the chain.
	 * ie. {{ my_var|boilerplate:2|abbr }}
	 **/
	public function index($value, $parameters=array())
	{
	}

}