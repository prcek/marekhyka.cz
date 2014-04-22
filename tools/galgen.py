#!/usr/bin/python
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

src_dir = "."
target_dir = "gal1"
html_prefix = "tools"
thumbnail_box_size = 128
max_image_size = (800,600)








target_images_path = os.path.join(target_dir,"imgs")
target_thumbnails_path = os.path.join(target_dir,"thumbs")
target_index_file = os.path.join(target_dir,"gallery.links")

print "target_images_path " + target_images_path
print "target_thumbnails_path " + target_thumbnails_path
print "target_index_file " + target_index_file

if not os.path.isdir(target_images_path):
	os.makedirs(target_images_path)
if not os.path.isdir(target_thumbnails_path):
	os.makedirs(target_thumbnails_path)


o = open(target_index_file, "w")
o.write("<div id=\"links\">\n")
for infile in glob.glob(os.path.join(src_dir,"*.jpg")):
	try:
		im = Image.open(infile)
		print infile + " " + str(im.size)
		fname = os.path.split(infile)[1]
		th_box(im,thumbnail_box_size).save(os.path.join(target_thumbnails_path,fname))
		max_box(im,max_image_size).save(os.path.join(target_images_path,fname))
		ip = os.path.join(html_prefix,target_images_path,fname)
		tp = os.path.join(html_prefix,target_thumbnails_path,fname)
		o.write("\t<a href=\"" + ip + "\" data-gallery>\n")
		o.write("\t\t<img src=\"" + tp + "\">\n")
		o.write("\t</a>\n")

	except IOError:
            print "cannot process ", infile		


o.write("</div>\n")
o.close()


