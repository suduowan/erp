mkdir folderName
cd 	
pwd
git init //	初始化目录
----------------------------------------------
git add fileName1,fileName2……	//	向仓库添加文件
git commit -m "注释信息"	//	提交文件到仓库
----------------------------------------------
git status	//	告诉你有文件被修改过（查看仓库文件状态，是否有过什么改动）
git diff fileName 	//	可以查看修改内容（查看文件差异 diif是difference(差异)的缩写）	
git log	[--pretty=oneline]	//	命令显示从最近到最远的提交日志