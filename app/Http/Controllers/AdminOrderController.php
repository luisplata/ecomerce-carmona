<?php namespace App\Http\Controllers;

	use App\Models\CuponPurchase;
    use App\Models\Order;
    use App\Models\Product;
    use App\Models\ProductPurchase;
    use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminOrderController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = false;
			$this->button_edit = true;
			$this->button_delete = false;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = true;
			$this->table = "order";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
            $this->col[] = ["label"=>"Nombre","name"=>"user_id","join"=>"users,name"];
            $this->col[] = ["label"=>"Apellido","name"=>"user_id","join"=>"users,lastname"];
            $this->col[] = ["label"=>"Cellphone","name"=>"user_id","join"=>"users,phone"];
            $this->col[] = ["label"=>"Correo Electronico","name"=>"user_id","join"=>"users,email"];
            $this->col[] = ["label"=>"Direccion","name"=>"address_id","join"=>"address,address"];
            $this->col[] = ["label"=>"Referencia","name"=>"reference"];
            //$this->col[] = ["label"=>"Sub Total","name"=>"subtotal"];
            //$this->col[] = ["label"=>"Envio","name"=>"shipping"];
            $this->col[] = ["label"=>"Total","name"=>"total"];
            $this->col[] = ["label"=>"Forma de pago","name"=>"pay_mod"];
            $this->col[] = ["label"=>"Fecha","name"=>"date"];
            $this->col[] = ["label"=>"Ciudad","name"=>"city","join"=>"cities,CiuNombre"];
            $this->col[] = ["label"=>"Estado","name"=>"status","join"=>"order_status,name"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
            $this->form[] = ['label'=>'Nombre','name'=>'user_id','type'=>'select','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'users,name','readonly'=>true];
            $this->form[] = ['label'=>'Referencia','name'=>'reference','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
            //->form[] = ['label'=>'Sub Total','name'=>'subtotal','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
            //$this->form[] = ['label'=>'Envio','name'=>'shipping','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
            $this->form[] = ['label'=>'Total','name'=>'total','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
            $this->form[] = ['label'=>'Fecha','name'=>'date','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
            $this->form[] = ['label'=>'Direccion','name'=>'address_id','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'address,address','readonly'=>true];
            $this->form[] = ['label'=>'Ciudad','name'=>'city','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'cities,CiuNombre','readonly'=>true];
            $this->form[] = ['label'=>'Estado','name'=>'status','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'order_status,name'];
            $this->form[] = ['label'=>'Notas','name'=>'notes','type'=>'textarea','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
            $this->form[] = ['label'=>'Forma de pago','name'=>'pay_mod','type'=>'select','dataenum'=>'COP;USD','validation'=>'required|integer|min:0','width'=>'col-sm-10'];

            $columns[] = ['label'=>'Nombre','name'=>'products_id','type'=>'select','datatable'=>'product,name','required'=>true];
            $columns[] = ['label'=>'Precio','name'=>'price_pro','type'=>'number','required'=>true];
            $columns[] = ['label'=>'Descuento','name'=>'discount','type'=>'number','required'=>true];
            $columns[] = ['label'=>'Cantidad','name'=>'cant','type'=>'number','required'=>true];
            $columns[] = ['label'=>'Total','name'=>'total','type'=>'number','required'=>true];
            $this->form[] = ['label'=>'Productos','name'=>'id','type'=>'child','columns'=>$columns,'table'=>'product_purchase','foreign_key'=>'product_purchase.order_id'];


            # END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"User Id","name"=>"user_id","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"user,id"];
			//$this->form[] = ["label"=>"Reference","name"=>"reference","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Subtotal","name"=>"subtotal","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Shipping","name"=>"shipping","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Total","name"=>"total","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Date","name"=>"date","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Address Id","name"=>"address_id","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"address,name"];
			//$this->form[] = ["label"=>"City","name"=>"city","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Status","name"=>"status","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Validate","name"=>"validate","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			# OLD END FORM

			/*
	        | ----------------------------------------------------------------------
	        | Sub Module
	        | ----------------------------------------------------------------------
			| @label          = Label of action
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        |
	        */
	        $this->sub_module = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        |
	        */
	        $this->addaction = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Button Selected
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button
	        | Then about the action, you should code at actionButtonSelected method
	        |
	        */
	        $this->button_selected = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------
	        | @message = Text of message
	        | @type    = warning,success,danger,info
	        |
	        */
	        $this->alert        = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add more button to header button
	        | ----------------------------------------------------------------------
	        | @label = Name of button
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        |
	        */
	        $this->index_button = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
	        |
	        */
	        $this->table_row_color = array();


	        /*
	        | ----------------------------------------------------------------------
	        | You may use this bellow array to add statistic at dashboard
	        | ----------------------------------------------------------------------
	        | @label, @count, @icon, @color
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add javascript at body
	        | ----------------------------------------------------------------------
	        | javascript code in the variable
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code after index table
	        | ----------------------------------------------------------------------
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include Javascript File
	        | ----------------------------------------------------------------------
	        | URL of your javascript each array
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add css style at body
	        | ----------------------------------------------------------------------
	        | css code in the variable
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;



	        /*
	        | ----------------------------------------------------------------------
	        | Include css File
	        | ----------------------------------------------------------------------
	        | URL of your css each array
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();


	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for button selected
	    | ----------------------------------------------------------------------
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here

	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate query of index result
	    | ----------------------------------------------------------------------
	    | @query = current sql query
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate row of index table html
	    | ----------------------------------------------------------------------
	    |
	    */
	    public function hook_row_index($column_index,&$column_value) {
	    	//Your code here
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before add data is execute
	    | ----------------------------------------------------------------------
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after add public static function called
	    | ----------------------------------------------------------------------
	    | @id = last insert id
	    |
	    */
	    public function hook_after_add($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before update data is execute
	    | ----------------------------------------------------------------------
	    | @postdata = input post data
	    | @id       = current id
	    |
	    */
	    public function hook_before_edit(&$postdata,$id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_edit($id) {
	        //Your code here

            $order = Order::find($id);
            if( $order->status == 1 && $order->validate == 1 ){
                $order->validate = 2;
                $order->save();
                $productoP = ProductPurchase::where('order_id',$id)->get();
                foreach ($productoP as $key => $proP){
                    $producto = Product::find($proP->products_id);
                    $producto->cant = $producto->cant - $proP->cant;
                    $producto->save();
                }
            }

            if($order->validate == 2 && $order->status == 1){
                $order->status = 1;
                $order->save();
            }
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :)


	}
