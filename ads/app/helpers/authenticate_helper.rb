module AuthenticateHelper

  def authorize
    puts session[:user].inspect
    if session[:user].nil?
      redirect_to index_logins_path
    end
  end
  
end
