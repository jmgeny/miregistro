<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Athletes
        Permission::create([
        		'name'			=> 'Navegar atletas',
        		'slug'			=> 'athletes.index',
        		'description'	=> 'Lista y navega todos los atletas del sistema',	 
        	]);

        Permission::create([
        		'name'			=> 'Ver detalle de usuario',
        		'slug'			=> 'athletes.show',
        		'description'	=> 'Ver en detalle cada usuario del sistema',	 
        	]); 

        Permission::create([
        		'name'			=> 'Editción de atletas',
        		'slug'			=> 'athletes.edit',
        		'description'	=> 'Editar cualquier dato de un usuario del sistema',	 
        	]);        	       	        

        Permission::create([
        		'name'			=> 'Eliminar usuario',
        		'slug'			=> 'athletes.destroy',
        		'description'	=> 'Elimnar cualquier usuario del sistema',	 
        	]);

        // Eventos
        Permission::create([
        		'name'			=> 'Navegar eventos',
        		'slug'			=> 'events.index',
        		'description'	=> 'Lista y navega todos los eventos del sistema',	 
        	]);

        Permission::create([
        		'name'			=> 'Ver detalle de usuario',
        		'slug'			=> 'events.show',
        		'description'	=> 'Ver en detalle cada usuario del sistema',	 
        	]); 

        Permission::create([
        		'name'			=> 'Editción de eventos',
        		'slug'			=> 'events.edit',
        		'description'	=> 'Editar cualquier dato de un usuario del sistema',	 
        	]);        	       	        

        Permission::create([
        		'name'			=> 'Eliminar usuario',
        		'slug'			=> 'events.destroy',
        		'description'	=> 'Elimnar cualquier usuario del sistema',	 
        	]);

        // Organizer
        Permission::create([
        		'name'			=> 'Navegar organizadores',
        		'slug'			=> 'organizers.index',
        		'description'	=> 'Lista y navega todos los organizadores del sistema',	 
        	]);

        Permission::create([
        		'name'			=> 'Ver detalle de usuario',
        		'slug'			=> 'organizers.show',
        		'description'	=> 'Ver en detalle cada usuario del sistema',	 
        	]); 

        Permission::create([
        		'name'			=> 'Editción de organizadores',
        		'slug'			=> 'organizers.edit',
        		'description'	=> 'Editar cualquier dato de un usuario del sistema',	 
        	]);        	       	        

        Permission::create([
        		'name'			=> 'Eliminar usuario',
        		'slug'			=> 'organizers.destroy',
        		'description'	=> 'Elimnar cualquier usuario del sistema',	 
        	]);        

    }
}
