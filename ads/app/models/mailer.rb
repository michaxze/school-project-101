class Mailer < ActionMailer::Base

  def newsletter(email)
    recipients  email.email
    from        "news@cebudirectories.com"
    subject     "Cebu Directories Co. Newsletter"
    
  end

  def premium_proposal(prospect)
    recipients  prospect.email
    from        "michael@cebudirectories.com"
    subject     "Proposal for Online business listing - CebuDirectories.com"
    @body['prospect'] = prospect
  end
  
end