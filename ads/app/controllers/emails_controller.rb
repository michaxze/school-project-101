class EmailsController < ApplicationController
  layout 'global'
  before_filter :authorize
  before_filter :make_page_title

  def index
    @emails = EmailAddress.find(:all, :order => "created_at  DESC")
  end
  
  def create
    begin
      params[:email].split(",").each do |email|
        existing_email = EmailAddress.find_by_email(email) rescue nil
        if existing_email.nil?
          e = EmailAddress.new
          e.email = email
          e.save
        end
      end
      index
      render :action => 'index' and return
    rescue StandardError => error
      puts error.inspect
      flash[:error] = error
    end
  end

  def send_premium
    email = EmailAddress.find(params[:id])
    email_type = EmailType.find_by_code("premium")
    
    emailsent = EmailSent.new
    emailsent.email_address_id = email.id
    emailsent.email_type_id = email_type.id
    emailsent.save
    
    Mailer.deliver_premium(email)
    redirect_to emails_url
  end

  def send_basic
    email = EmailAddress.find(params[:id])
    email_type = EmailType.find_by_code("basic")

    emailsent = EmailSent.new
    emailsent.email_address_id = email.id
    emailsent.email_type_id = email_type.id
    emailsent.save
  
    Mailer.deliver_basic(email)
    redirect_to emails_url
  end
  
  def send_newsletter
    email = EmailAddress.find(params[:id])
    email_type = EmailType.find_by_code("newsletter")
    
    emailsent = EmailSent.new
    emailsent.email_address_id = email.id
    emailsent.email_type_id = email_type.id
    emailsent.save
    
    Mailer.deliver_newsletter(email)
    redirect_to emails_url
  end

  private
  
  def make_page_title
    @page_title = "Email Addresses"
  end
  
end