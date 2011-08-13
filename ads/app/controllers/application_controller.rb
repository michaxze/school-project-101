# Filters added to this controller apply to all controllers in the application.
# Likewise, all the methods added will be available for all controllers.

class ApplicationController < ActionController::Base
  helper :all # include all helpers, all the time
  protect_from_forgery # See ActionController::RequestForgeryProtection for details
  include AuthenticateHelper
  before_filter :show_counters
  # Scrub sensitive parameters from your log
  # filter_parameter_logging :password

  def current_user
    @current_user ||= User.find_by_login(session[:user])
  end
  helper_method :current_user
  
  def logged_in?
    session[:user] != nil
  end
  helper_method :logged_in?
  
  def show_counters
    @all_listings = Listing.count(:conditions => ["status=1"])
    @new_listings = Listing.count(:conditions => ["status IS NULL"])
  end

end
