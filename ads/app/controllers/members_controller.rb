class MembersController < ApplicationController
  layout 'global'
  before_filter :authorize
  
  def show
    @member = Member.find(params[:id])
  end
  
end