# Notes about the laravel framework


## Installation and Project Creation

	We have installed composer using terminal 
	create projects using 

	composer create-project --prefer-dist laravel/laravel <app-name>

	//this line can be used to create the web-project using the PHP framework laravel 

## Misc points
	
	* while returning a view you use `<foldername>.<viewname>` to access said view.
	* 

## Deeper functionality (Routes and misc)

	### Routing

		*	To add small routes that can be used for API purposes and stuff, we can easily just call the method along with the function as follows:
		` function() { } `. In here add the exec that you want exec-ed.
		* For larger routes we can add the route with the ` Route:get('<routename>', 'Controller@<method name>'); `
