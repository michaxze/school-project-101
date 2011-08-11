class UsersController < ApplicationController
  layout 'global'
  before_filter :authorize
  before_filter :make_page_title

  def new
    @user = User.new
  end
  
  def index
    @users = User.find(:all)
  end
  
  def edit
    @user = User.find(params[:id])
  end
  
  def create
    @user = User.new(params[:user])

    unless params[:password].blank?
      @user.password_hash = params[:password]
    end
    
    if @user.save
      flash[:notice] = "User created"
      redirect_to users_path
    else
      render :new
    end
  end

  def update
    u = User.find(params[:id])

    unless params[:password].blank?
      u.password_hash = params[:password]
    end
    u.update_attributes(params[:user])
    flash[:notice]  = "User updated."
    redirect_to users_path
  end

  def destroy
    p = Prospect.find(params[:id])
    p.deleted_at = Time.now.to_date
    p.save
    flash[:notice] = "Prospect deleted."
    redirect_to prospects_path
  end


  private
  
  def make_page_title
    @page_title = "Users"
  end
  
end