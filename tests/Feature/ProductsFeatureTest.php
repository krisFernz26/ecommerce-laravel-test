<?php

namespace Tests\Feature;

use DB;
use ProductTypesTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**@test*/
    function a_user_can_view_all_of_the_products()
    {
        //given
            $this->create_user_types();
            // a user must exist
            $user = factory(\App\User::class)->create();
            //login the user
            $this->login_user($user);
            // a minimum of one product must exist
            $this->create_product_types();
            $product = factory(\App\Product::class)->create();

        //when
            // when visiting the route /products
            $this->get('/products');

        //then
            // I expect the products to be displayed
            $this->assertSee($product->name);

    }

    public function login_user($user)
    {
        $this->actingAs($user);
    }

    public function create_user_types()
    {
         $user_types = [
            ['name' => 'Buyer', 'description' => 'Just a buyer.'],
            ['name' => 'Seller', 'description' => 'Just a seller.'],
            ['name' => 'Buyer and Seller', 'description' => 'Buyer and seller.'],
            ['name' => 'Company', 'description' => 'A company account.'],
            ['name' => 'Lurker', 'description' => 'Just looking around.'],
            ['name' => 'Admin', 'description' => 'An admin.']
        ];
        DB:table('users_type')->insert('$user_types');
    }

    public function create_product_types()
    {     
        $product_types = [
            ['name' => 'Clothing', 'description' => 'Clothing'],
            ['name' => 'Health and Beauty', 'description' => 'Health and Beauty'],
            ['name' => 'Furniture', 'description' => 'Furniture'],
            ['name' => 'Accessories', 'description' => 'Accessories'],
            ['name' => 'Electronics', 'description' => 'Electronics']
        ];

        DB:table('product_types')->insert('$product_types');
    }

    /**@test*/
    function a_user_will_be_able_to_create_a_new_product()
    {
        //given
            $this->create_user_types();
            // a user must exist
            $user = factory(\App\User::class)->create();
            //login the user
            $this->login_user($user); 
            $this->create_product_types();
            //product types must exist
            $this->seed(ProductTypesTableSeeder::class);
            //create a product
            $new_product = factory(\App\Product::class)->make()->toArray();
        //when
            // post to route /products
            $response = $this->post('/products', $new_product);
        //then 
            // I expect to be redirected to /products
            // I expect to see the products in the database
            $response->assertRedirect('/products');
            $this->assertDatabaseHas('products', $new_product);

    }

    /**@test*/
    function a_user_will_be_able_to_update_a_product()
    {
        //given

            $this->create_user_types();
            // a user must exist
            $user = factory(\App\User::class)->create();
            //login the user
            $this->login_user($user); 
            $this->create_product_types();
            //product types must exist
            $this->seed(ProductTypesTableSeeder::class);
            //create a product
            $update_product = factory(\App\Product::class)->make()->toArray();
        //when
            // update to route /products/{{productId}}
            $response = $this->update('/products'.$product->id, $update_product);
        //then 
            //I expect to be redirected to /products
            //I expect to see the products inside the database
            $response->assertRedirect('/products'.$product->id);
            $this->assertDatabaseHas('products', $update_product);
    }

    /**@test*/
    function a_user_will_be_able_to_delete_a_product()
    {
        //given
            $this->create_user_types();
            // a user must exist
            $user = factory(\App\User::class)->create();
            //login the user
            $this->login_user($user); 
            $this->create_product_types();
            //product types must exist
            $this->seed(ProductTypesTableSeeder::class);
            //create a product
            $delete_product = factory(\App\Product::class)->make()->toArray();
        //when
            // update to delete to route /products/{{productId}}
            $response = $this->destroy('/products'.$product->id, $delete_product);
        //then 
            //I expect to be redirected to /products
            //I expect to see the products inside the database
            $response->assertRedirect('/products'.$product->id);
            $this->assertDatabaseHas('products', $delete_product);
    }
}
