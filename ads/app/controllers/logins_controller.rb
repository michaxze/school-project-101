class LoginsController < ApplicationController
  layout 'global'
  before_filter :make_page_title
  
  def index
  end

  def create
    puts params.inspect
    password = Digest::SHA256.hexdigest("#{params[:password]}")
    puts password
    user = User.find(:first, :conditions => ["login=? and password_hash=?", params[:username], password]) 
    puts user.inspect
    if user
      session[:user] = params[:username]
      redirect_to emails_path
    else
      flash[:error] = "Incorrect username or password"
      render(:action => 'index') and return
    end    
  end
  
  def logout
    session[:user] = nil
    render(:action => 'index') and return
  end
  
  private
  
  def make_page_title
    @page_title = "Login "
  end
end