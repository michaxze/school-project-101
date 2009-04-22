class EventsController < ApplicationController
  layout 'events'

  def index
    @sponsored_events = []
    @current_month_events = []
  end

end
