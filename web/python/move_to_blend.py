import os
import sys
import shutil
from PIL import Image 
import imghdr

#print(str(sys.argv))
os.chdir(str(sys.argv[1]))
for filename in os.listdir("."):
	#print(filename + " " + str(imghdr.what(filename)))
	if str(imghdr.what(filename)) != "None" or filename.endswith("dds"): 	
		#catIm = Image.open(filename)
		#catImCr = catIm.crop((0,0,catIm.width-(catIm.width%4),catIm.height-(catIm.height%4)))
		#catImCr.save(filename)
		shutil.move(filename, "../../eihoo/blend_data/furniture_zips/"+filename)
