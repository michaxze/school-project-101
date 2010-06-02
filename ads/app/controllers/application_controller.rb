# Filters added to this controller apply to all controllers in the application.
# Likewise, all the methods added will be available for all controllers.

class ApplicationController < ActionController::Base
  helper :all # include all helpers, all the time
  protect_from_forgery # See ActionController::RequestForgeryProtection for details
  include AuthenticateHelper
  
  # Scrub sensitive parameters from your log
  # filter_parameter_logging :password

  def user_required(e)
    if request.xhr?
      render_403
    else
      flash[:error] = 'Log a.u.b. in om verder te gaan'
      redirect_to(:controller => 'session')
    end
  end

  def current_user
    @current_user ||= User.find_by_id(session[:user])
  end
  helper_method :current_user
  
  def logged_in?
    session[:user] != nil
  end
  helper_method :logged_in?

end
