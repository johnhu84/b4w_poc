import sys
import os
import bpy

#unselect everything
# <insert code here, this can vary depending on your situation> 
# bpy.ops.object.select_all()

from bpy import context
#path = "/home/desktop/blend4web_ce_16_10/blend4web_ce"
#context.user_preferences.filepaths.script_directory = path

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

blend_dir = os.path.dirname(bpy.data.filepath)
if blend_dir not in sys.path:
   sys.path.append(blend_dir)
# Import FBX
#print("Hello world")
#print(str(sys.argv))
#print(str(sys.argv[1]))
#print(str(sys.argv[2]))
#fp = "C:/20161117/bed.FBX"
bpy.ops.import_scene.fbx(filepath=str(sys.argv[6]))#"D:/20161116/bed.FBX")#str(sys.argv[1]))#"D:/2016.10.27/a102.FBX")#2016.10.31/object/FBX 2013/shuimiancang.FBX")
#, "INVOKE_DEFAULT")

for obj in bpy.data.objects:
	obj.b4w_do_not_batch = True
	obj.b4w_selectable = True

# Export blend file
#bpy.ops.wm.save_mainfile( filepath="D:/test.html" )
bpy.ops.export_scene.b4w_json(filepath=str(sys.argv[7]))#"D:/20161116/bed2.json")#"D:/20161116/bed.json")#str(sys.argv[2]))#"D:/2016.10.27/a102.json")#2016.10.31/object/FBX 2013/shuimiancang.html")
