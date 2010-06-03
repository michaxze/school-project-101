class MessagesController < ApplicationController
  layout 'global'
  before_filter :make_page_title
  
  def index
    @messages = Message.get_messages(params[:page])
  end

  
  private
  
  def make_page_title
    @page_title = "Message from Contact Us form"
  end
end
