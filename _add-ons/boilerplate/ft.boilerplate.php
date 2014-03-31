<?php

class Fieldtype_boilerplate extends Fieldtype
{

	/**
	 * This is called when its time for your fieldtype to be rendered.
	 * You should just return the HTML here.
	 * The label and instructions (top and bottom) will be output automatically for you.
	 **/
	public function render()
	{
		// This is an example of how to create a text field and some values that
		// are available to you.
		$attributes = array(
			'name'     => $this->fieldname,
			'id'       => $this->field_id,
			'tabindex' => $this->tabindex,
			'value'    => HTML::convertSpecialCharacters($this->field_data)
		);
		return HTML::makeInput('text', $attributes, $this->is_required);
	}

	/**
	 * If you have a good reason to modify the order of what is output
	 * by your fieldtype, you can include this method.
	 *
	 * In most cases, you don't need to include this.
	 **/
	public function render_field()
	{
		// This is the default order. You can rearrange or completely modify the return value.
		return $this->render_label() .
		       $this->render_instructions_above() .
		       $this->render_error() .
		       $this->render() .
		       $this->render_instructions_below();
	}

}