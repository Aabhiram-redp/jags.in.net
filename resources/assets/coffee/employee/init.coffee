Employee = Window.Employee || {}
#Load some bootstrap files
$(document).ready ->
  $('[data-toggle="tooltip"]').tooltip()
  #Variable and Jquery Elements
  quotesCarousel = $('#slick-quotes')
  skillChart     = $('.skill-chart')

  #initiate HeaderMenu
  setHeaderMenu.setHeader()

  quotesCarousel.slick
    autoplay   : true
    arrows     : false
  #Control slick quotes carousel with custom navs
  $('#slick-q-prev').on 'click', ->
    quotesCarousel.slick 'slickPrev'
  $('#slick-q-next').on 'click', ->
    quotesCarousel.slick 'slickNext'
  #Initialize jquery easy pie chart
  if skillChart.length > 0
    skillChart.easyPieChart
      lineWidth : 10
      size      : 180
  return false
$(window).resize ->
  setHeaderMenu.setHeader()
  return false

class HeaderMenu
  constructor: ->
    @fixedHeader    = $('#employee-header')
    @heightOfWindow = $(window).height()
  setHeader: ->
    @fixedHeader.affix
      offset:
        top: @heightOfWindow
        bottom: (e)->
          # For anyother function
    return false
setHeaderMenu = new HeaderMenu()