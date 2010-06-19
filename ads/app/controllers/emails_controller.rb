class EmailsController < ApplicationController
  layout 'global'
  before_filter :authorize
  before_filter :make_page_title

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
  
  def send_newsletter
    email = EmailAddress.find(params[:id])
    Mailer.deliver_newsletter(email)
    redirect_to emails_url
  end

  private
  
  def make_page_title
    @page_title = "Email Addresses"
  end
  
end