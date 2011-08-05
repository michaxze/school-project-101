ActionController::Routing::Routes.draw do |map|
  # The priority is based upon order of creation: first created -> highest priority.

  # Sample of regular route:
  #   map.connect 'products/:id', :controller => 'catalog', :action => 'view'
  # Keep in mind you can assign values other than :controller and :action

  # Sample of named route:
  #   map.purchase 'products/:id/purchase', :controller => 'catalog', :action => 'purchase'
  # This route can be invoked with purchase_url(:id => product.id)

  # Sample resource route (maps HTTP verbs to controller actions automatically):
  #   map.resources :products

  # Sample resource route with options:
  #   map.resources :products, :member => { :short => :get, :toggle => :post }, :collection => { :sold => :get }

  # Sample resource route with sub-resources:
  #   map.resources :products, :has_many => [ :comments, :sales ], :has_one => :seller
  
  # Sample resource route with more complex sub-resources
  #   map.resources :products do |products|
  #     products.resources :comments
  #     products.resources :sales, :collection => { :recent => :get }
  #   end

  # Sample resource route within a namespace:
  #   map.namespace :admin do |admin|
  #     # Directs /admin/products/* to Admin::ProductsController (app/controllers/admin/products_controller.rb)
  #     admin.resources :products
  #   end

  # You can have the root of your site routed with map.root -- just remember to delete public/index.html.
   map.root :controller => "logins", :action => "index"
  #  map.connect '', :controller => 'index'
  # See how all your routes lay out with "rake routes"

  map.resources :members, :controller => 'members'
  map.resources :messages, :controller => 'messages'  
  map.resources :listings, :controller => 'listings',
                           :collection => { :signups => :get, :newlisting => :get, :deletenewlisting => :get, :approve => :get}
  map.resources :posts, :controller => 'posts'
  
  map.resources :advertisements, :controller => 'advertisements',
                :collection => { :views => :get,
                                 :update_views => :get }
  map.resources :emails, :controller => 'emails',
                         :collection => { 'send_newsletter' => :get,
                                          'send_premium' => :get}
  map.resources :logins, 
                :controller => 'logins',
                :collection => { :logout => :get, :index => :get }
  map.resources :prospects, 
                :controller => 'prospects',
                :collection => { 'send_premium' => :get }




  # Install the default routes as the lowest priority.
  # Note: These default routes make all actions in every controller accessible via GET requests. You should
  # consider removing or commenting them out if you're using named routes and resources.
  map.connect ':controller/:action/:id'
  map.connect ':controller/:action/:id.:format'
end
