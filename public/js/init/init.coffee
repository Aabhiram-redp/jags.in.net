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
initJags = new JAGS.load()
# When page load
$(window).load ->
  initJags.init()
# When user scroll
$(window).scroll ->
  initJags.changeHeader()

