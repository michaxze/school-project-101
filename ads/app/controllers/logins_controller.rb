class LoginsController < ApplicationController
  layout 'global'
  
  def index
  end

  def create
    password = Digest::SHA256.hexdigest("#{params[:password]}")
    user = User.find(:first, :conditions => ["login=? and password_hash=?", params[:username], password]) 
    if user
      session[:user] = params[:username]
      if user.permissions == 1
        redirect_to emails_path
      else
        redirect_to prospects_path
      end
    else
      flash[:error] = "Incorrect username or password"
      render(:action => 'index') and return
    end    
  end
  
  def logout
    session[:user] = nil
    redirect_to logins_path
  end
  
  private
  
  def make_page_title
    @page_title = "Login "
  end
end
