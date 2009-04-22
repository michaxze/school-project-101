class IndexController < ApplicationController
  layout 'global'

  def index
    @toplisting = Business.get_top(15)
  end

end
