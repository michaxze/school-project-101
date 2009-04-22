class ListingController < ApplicationController
  layout 'listing'

  def index
    @toplisting = []
    @categories = CebuCategory.find(:all)
    @categories = ["Accomodation","Bar and Resto","Health","Education",
    					"Universities","College","Pre-School","Technology",
    					"Accomodation","Bar and Resto","Health","Education",
    					"Universities","College","Accomodation",
    					"Universities","College"]
    @sub_categories = ["Accodation", "Bar and Resto"]
  end

end
