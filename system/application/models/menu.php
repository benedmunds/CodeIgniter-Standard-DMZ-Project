<?php

/**
 * Menu DataMapper Model
 *
 * Use this basic model as a menu for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Menu library (as the classes may collide).
 * 
 */
class Menu extends DataMapper {
	
	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	// var $model = 'menu';
	// var $table = 'menus';
	
	
	// Relationships
	
	// Insert related models that Menu can have just one of.
	var $has_one = array();
	
	// Insert related models that Menu can have more than one of.
	var $has_many = array();
	
	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('user'); // Menu has one User 
	 * 
	 * For complex relationships, such as having a Creator and Editor for
	 * Menu, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'user',
	 *   		'other_field' => 'created_menu'
	 *   	)
	 *   );
	 *   
	 * Don't forget to add 'created_menu' to User, with class set to
	 * 'menu', and the other_field set to 'creator'!
	 * 
	 */
	
	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------
	
	var $validation = array(
		'example' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'max_length' => 120),
			'label' => 'Example'
		)
	);
	
	// --------------------------------------------------------------------
	// Default Ordering
	//   Uncomment this to always sort by 'name', then by
	//   id descending (unless overridden)
	// --------------------------------------------------------------------
	
	// var $default_order_by = array('name', 'id' => 'desc');
	
	// --------------------------------------------------------------------

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }
	
	// --------------------------------------------------------------------
	// Custom Methods
	//   Add your own custom methods here to enhance the model.
	// --------------------------------------------------------------------
	
	/* Example Custom Method
	function get_open_menus()
	{
		return $this->where('status <>', 'closed')->get();
	}
	*/
	
	// --------------------------------------------------------------------
	// Custom Validation Rules
	//   Add custom validation rules for this model here.
	// --------------------------------------------------------------------
	
	/* Example Rule
	function _convert_written_numbers($field, $parameter)
	{
	 	$nums = array('one' => 1, 'two' => 2, 'three' => 3);
	 	if(in_array($this->{$field}, $nums))
		{
			$this->{$field} = $nums[$this->{$field}];
	 	}
	}
	*/
}

/* End of file menu.php */
/* Location: ./application/models/menu.php */