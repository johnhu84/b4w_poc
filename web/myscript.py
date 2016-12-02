import sys
import os
import bpy

#unselect everything
# <insert code here, this can vary depending on your situation> 
# bpy.ops.object.select_all()

from bpy import context
path = "/home/huchunlin/blender-2.78a-linux-glibc211-x86_64"
context.user_preferences.filepaths.script_directory = path

# gather list of items of interest.
candidate_list = [item.name for item in bpy.data.objects if item.type == "MESH"]

# select them only.
for object_name in candidate_list:
  bpy.data.objects[object_name].select = True

# remove all selected.
bpy.ops.object.delete()

# remove the meshes, they have no users anymore.
for item in bpy.data.meshes:
  bpy.data.meshes.remove(item)

#blend_dir = os.path.dirname(bpy.data.filepath)
#if blend_dir not in sys.path:
#   sys.path.append(blend_dir)
# Import FBX
bpy.ops.import_scene.fbx(filepath="/var/www/html/web/furniture_zips/furniture4.FBX")#2016.10.31/object/FBX 2013/shuimiancang.FBX")
#, "INVOKE_DEFAULT")

# Export blend file
#bpy.ops.wm.save_mainfile( filepath="D:/test.html" )
bpy.ops.export_scene.b4w_json(filepath="/var/www/html/web/furniture_zips/furniture4.json")#2016.10.31/object/FBX 2013/shuimiancang.html")
