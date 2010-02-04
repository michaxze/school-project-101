class EmailsController < ApplicationController
  layout 'global'
  before_filter :authorize
  
  def index
    @emails = EmailAddress.find(:all, :order => "created_at  DESC")
  end
  
  def create
    begin
      email = EmailAddress.new
      email.email = params[:email]
      email.save
      index
      render :action => 'index' and return
    rescue StandardError => error
      puts error.inspect
      flash[:error] = error
    end
  end
end