# Initiate this when any pages load o this website
window.JAGS = window.JAGS || {}
class JAGS.load
  constructor : ->
    @normalHeader = $('.main-header')
    $('[data-toggle="tooltip"]').tooltip
    @parallaxWrapper = $('.extras')
  init: ->
    @changeHeader()
  stickyHeader : ->
    @normalHeader.addClass('sticky-header')
    return false
  defaultHeader : ->
    @normalHeader.removeClass('sticky-header')
    return false
  changeHeader : ->
    scrollTop = $(window)
    if scrollTop.scrollTop() > 100
      @stickyHeader()
    else
      @defaultHeader()


class JAGS.scrollMenuSelect
  constructor: ->
    @scrollHeaderMenus = $('#main-header-menu ul li')
  activeMenus: ->
    that = @
    scrollTop = $(window).scrollTop() + $('.main-header').outerHeight()
    @scrollHeaderMenus.each (index,value) ->
      element = $(value).children('a')
      scrollSection = element.attr('href')
      scrollSamePage = element.attr('data-page') == "same" ?true : false
      if typeof scrollSection != "undefined" and scrollSamePage
        scrollSectionTopOffset = $(scrollSection).offset().top
        scrollSectionBottomOffset = $(scrollSection).offset().top + $(scrollSection).outerHeight()
        if scrollSectionTopOffset < scrollTop && scrollSectionBottomOffset > scrollTop
          that.scrollHeaderMenus.removeClass('active')
          $(value).addClass('active')


initJags = new JAGS.load()
initScrollMenus = new JAGS.scrollMenuSelect()
# When page load
$(window).load ->
  if($('.home').length > 0)
    initJags.init()
# When user scroll
$(window).scroll ->
  if($('.home').length > 0)
    initJags.changeHeader()
    initScrollMenus.activeMenus()

