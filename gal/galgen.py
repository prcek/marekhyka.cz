#!/usr/bin/python
# -*- coding: utf-8 -*-
import sys
import os
import glob
from PIL import Image


def th_box(im,d):
	(dx,dy) = im.size
	if (dx > dy) :
		left_x = (dx-dy)/2
		right_x = left_x+dy
		top_y = 0
		bottom_y = dy
	else:
		top_y = (dy-dx)/2
		bottom_y = top_y+dx
		left_x = 0
		right_x = dx

	crop_box = (left_x,top_y,right_x,bottom_y)
	return im.crop(crop_box).resize((d,d),Image.ANTIALIAS)


def th(im,s):
	(dx,dy) = im.size
	(tdx,tdy) = s

	xr = float(dx)/tdx
	yr = float(dy)/tdy


#	print "x ratio is " + str(xr)
#	print "y ratio is " + str(yr)

	if (xr<yr):
#		print "x ratio < y ratio"
		ny = int(dy / xr)
		top_y = (ny-tdy) / 2
		bottom_y = top_y + tdy
#		print "new dy is " + str(ny)
#		print "top_y is " + str(top_y)
#		print "bottom_y is " + str(bottom_y)
		crop_box=(0,top_y,tdx,bottom_y)
		return im.resize((tdx,ny),Image.ANTIALIAS).crop(crop_box)

	else:
#		print "y ratio < x ratio"
		nx = int(dx / yr)
		left_x = (nx - tdx) / 2
		right_x = left_x + tdx
#		print "new dx is " + str(nx)
#		print "left_x is " + str(left_x)
#		print "right_x is " + str(right_x)
		crop_box=(left_x,0,right_x,tdy)

		return im.resize((nx,tdy),Image.ANTIALIAS).crop(crop_box)






def max_box(im,maxdim):
	(max_dx,max_dy) = maxdim
	(dx,dy) = im.size
	if ((dx-max_dx) > (dy-max_dy)):
		r = float(max_dx) / dx
		new_dy = int(dy * r)
		new_dx = max_dx
	else:
		r = float(max_dy) / dy
		new_dx = int(dx * r)
		new_dy = max_dy

	return im.resize((new_dx,new_dy), Image.ANTIALIAS)

src_dir = "./src/chotebor_2014"
target_dir = "chotebor_2014"
html_prefix = "gal"

thumbnail_size = (75,75)
max_image_size = (800,600)







gallery_name = target_dir.replace("/", "_")
target_images_path = os.path.join(target_dir,"imgs")
target_thumbnails_path = os.path.join(target_dir,"thumbs")
target_index_file = os.path.join(target_dir,"gallery.links")
target_index_file_c = os.path.join(target_dir,"gallery_c.links")


print "target_images_path " + target_images_path
print "target_thumbnails_path " + target_thumbnails_path
print "target_index_file " + target_index_file
print "gallery_name " + gallery_name



if not os.path.isdir(target_images_path):
	os.makedirs(target_images_path)
if not os.path.isdir(target_thumbnails_path):
	os.makedirs(target_thumbnails_path)


c = open(target_index_file_c, "w")
c.write("<div id=\"blueimp-gallery-carousel-"+gallery_name+"\" class=\"blueimp-gallery blueimp-gallery-controls  blueimp-gallery-carousel\">\n\
\t<div class=\"slides\"></div>\n\t<h3 class=\"title\"></h3>\n\t<a class=\"prev\">‹</a>\n\
\t<a class=\"next\">›</a>\n\t<a class=\"play-pause\"></a>\n\t<ol class=\"indicator\"></ol>\n</div>\n")

o = open(target_index_file, "w")
o.write("<div class=\"gal\" id=\"links-gallery-"+gallery_name+"\">\n")
c.write("<div id=\"links-gallery-carousel-"+gallery_name+"\">\n")
for infile in glob.glob(os.path.join(src_dir,"*.jpg")):
	try:
		im = Image.open(infile)
		print infile + " " + str(im.size)
		fname = os.path.split(infile)[1]
#		th_box(im,thumbnail_box_size).save(os.path.join(target_thumbnails_path,fname))
		th(im,thumbnail_size).save(os.path.join(target_thumbnails_path,fname))
		max_box(im,max_image_size).save(os.path.join(target_images_path,fname))
		ip = os.path.join(html_prefix,target_images_path,fname)
		tp = os.path.join(html_prefix,target_thumbnails_path,fname)
		o.write("\t<a href=\"" + ip + "\" data-gallery>\n")
		o.write("\t\t<img src=\"" + tp + "\" class=\"img-responsive pull-left\">\n")
		o.write("\t</a>\n")

		c.write("\t<a href=\"" + ip + "\" data-gallery>\n")
		#c.write("\t\t<img src=\"" + tp + "\" class=\"img-responsive pull-left\">\n")
		c.write("\t</a>\n")


	except IOError:
            print "cannot process ", infile		


o.write("</div>\n")
c.write("</div>\n")


o.write("\n\
    <script>\n\
    document.getElementById('links-gallery-"+gallery_name+"').onclick = function (event) {\n\
        event = event || window.event;\n\
        var target = event.target || event.srcElement,\n\
            link = target.src ? target.parentNode : target,\n\
            options = {index: link, event: event},\n\
            links = this.getElementsByTagName('a');\n\
        blueimp.Gallery(links, options);\n\
    };\n\
    </script>\n\
")

#c.write("<script>\n\
#	blueimp.Gallery(\n\
#    document.getElementById('links-gallery-carousel-"+gallery_name+"').getElementsByTagName('a'),\n\
#    {\n\
#        container: '#blueimp-gallery-carousel-"+gallery_name+"',\n\
#        carousel: true\n\
#    }\n\
#);\n\
#</script>\n")

o.close()
c.close()

