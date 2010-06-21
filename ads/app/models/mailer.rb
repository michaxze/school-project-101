class Mailer < ActionMailer::Base

  def newsletter(email)
    recipients  email.email
    from        "news@cebudirectories.com"
    subject     "Cebu Directories Co. Newsletter"
  end
  
end