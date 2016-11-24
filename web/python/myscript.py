import sys
import os
import bpy
import shutil
import argparse
from bpy import context

#parser = argparse.ArgumentParser(description='main script to process zip containing FBX and material map texture files')
#parser.add_argument('zip file', metavar='a', type=string, nargs='+', help='temporary file locator for zip')
#parser.add_argument('output file', metavar='b', type=string, nargs='+', help='output name file')
#args = parser.parse_args()

#unselect everything
# <insert code here, this can vary depending on your situation> 
# bpy.ops.object.select_all()

path = "/home/desktop/blend4web_ce_16_10/blend4web_ce"
context.user_preferences.filepaths.script_directory = path

# gather list of items of interest.
candidate_list = [item.name for item in bpy.data.objects if item.type == "MESH"]
print(str(sys.argv))
# select them only.
for object_name in candidate_list:
  bpy.data.objects[object_name].select = True

# remove all selected.
bpy.ops.object.delete()

# remove the meshes, they have no users anymore.
for item in bpy.data.meshes:
  bpy.data.meshes.remove(item)

blend_dir = os.path.dirname(bpy.data.filepath)
if blend_dir not in sys.path:
   sys.path.append(blend_dir)
# Import FBX
#print("Hello world")
#print(str(sys.argv))
#print(str(sys.argv[1]))
#print(str(sys.argv[2]))
#fp = "C:/20161117/bed.FBX"
dir=str(sys.argv[6])
#print(dir)
#os.chdir(dir)
#print("hello world3")
for filename in os.listdir(dir):
	#print(filename)
	if filename.endswith(".FBX"):
		#print(filename)
		filetoimport=dir+"/"+filename
		print("importing..."+filetoimport)	
		bpy.ops.import_scene.fbx(filepath=filetoimport)
		#os.remove(filetoimport)
#bpy.ops.import_scene.fbx(filepath=str(sys.argv[4]))#"D:/20161116/bed.FBX")#str(sys.argv[1]))#"D:/2016.10.27/a102.FBX")#2016.10.31/object/FBX 2013/shuimiancang.FBX")
#, "INVOKE_DEFAULT")
print("hello world2")
for obj in bpy.data.objects:
	obj.b4w_do_not_batch = True
	obj.b4w_selectable = True

# Export blend file
#bpy.ops.wm.save_mainfile( filepath="D:/test.html" )
filetoexport = str(sys.argv[7])+".json"
print(filetoexport)
bpy.ops.export_scene.b4w_json(filepath=filetoexport)#"D:/20161116/bed2.json")#"D:/20161116/bed.json")#str(sys.argv[2]))#"D:/2016.10.27/a102.json")#2016.10.31/object/FBX 2013/shuimiancang.html")
shutil.copy(str(sys.argv[7])+".json", "/var/www/html/eihoo/blend_data/"+str(sys.argv[7])+".json")
shutil.copy(str(sys.argv[7])+".bin", "/var/www/html/eihoo/blend_data/"+str(sys.argv[7])+".bin")
shutil.copy(str(sys.argv[7])+".json", "/var/www/html/b4w_poc/blend_data/"+str(sys.argv[7])+".json")
shutil.copy(str(sys.argv[7])+".bin", "/var/www/html/b4w_poc/blend_data/"+str(sys.argv[7])+".bin")
os.remove(str(sys.argv[7])+".json")
os.remove(str(sys.argv[7])+".bin")
