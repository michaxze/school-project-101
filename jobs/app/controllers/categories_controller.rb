class CategoriesController < ApplicationController
  def show
    @jobs = Job.find(:all, :conditions => ["category_id = ?", params[:id]])
  end
end