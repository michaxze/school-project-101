class PostsController < ApplicationController
  layout 'global'
  before_filter :make_page_title
  before_filter :authorize  

  def index
    
  end

  
  private
  
  def make_page_title
    @page_title = "Posts"
  end
end
