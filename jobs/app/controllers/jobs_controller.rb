class JobsController < ApplicationController
  def index
    @jobs = Job.find(:all)
  end
  
  def show
    @job = Job.find(params[:id])
  end
  
  def new
    @categories = Category.find(:all)
  end
end