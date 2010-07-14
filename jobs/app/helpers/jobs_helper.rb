module JobsHelper
  
  def display_more_link(category)
    link = link_to("See more Miscellaneous jobs &raquo;", jobs_path)
    html = content_tag(:span, link, :class => "right")
  end
end
