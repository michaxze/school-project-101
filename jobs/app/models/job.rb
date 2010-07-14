class Job < ActiveRecord::Base
  belongs_to :company
  belongs_to :category
end
