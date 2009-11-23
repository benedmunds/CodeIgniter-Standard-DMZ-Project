<?php

/**
 * Page DataMapper Model
 *
 * Use this basic model as a page for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Page library (as the classes may collide).
 * 
 */
class Page extends DataMapper {
	
	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	// var $model = 'page';
	// var $table = 'pages';
	
	
	// Relationships
	var $has_one = array();
	var $has_many = array('group');
	
	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('user'); // Page has one User 
	 * 
	 * For complex relationships, such as having a Creator and Editor for
	 * Page, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'user',
	 *   		'other_field' => 'created_page'
	 *   	)
	 *   );
	 *   
	 * Don't forget to add 'created_page' to User, with class set to
	 * 'page', and the other_field set to 'creator'!
	 * 
	 */
	
	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------
	
	/*
	var $validation = array(
		'example' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'max_length' => 120),
			'label' => 'Example'
		)
	);
	*/
	
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
	function get_open_pages()
	{
		return $this->where('status <>', 'closed')->get();
	}
	*/
	function get_menu($type='main')
    {
    	return $this->where(array('menu' => $type, 'active' => 1))->get();
    }
    
	function get_title($controller=false, $action=false)
    {
    	if ($action=="index")$action="";
    	$this->select('title')->where(array('controller' => $controller,
        				                    'view'       => $action,
        				                   ));
    	
        $this_page = $this->get();
        
        if (isset($this_page->title)) {
        	return $this_page->title;
        }
        else {
        	return false;
        }
    }
	
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

/* End of file page.php */
/* Location: ./application/models/page.php */