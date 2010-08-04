module AuthenticateHelper

  def authorize
    if session[:user].nil?
      redirect_to index_logins_path
    end
  end
  
  
end
