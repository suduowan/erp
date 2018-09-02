mkdir folderNamt e
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
/*
	$ git log --pretty=oneline
	1094adb7b9b3807259d8cb349e7df1d4d6477073 (HEAD -> master) append GPL	//	1094adb7b9b3807259d8cb349e7df1d4d6477073为版本密令和SVN区分（SVN的ID都是1,2,3……)
	e475afc93c209a690c39c13a46716e8fa000c366 add distributed
	eaadf4e385e865d25c48e7ca9c8395c3f7dfaef0 wrote a readme file
 */
git reset 	//	版本回退
/*
	HEAD^ //	回退到上个版本
	HEAD^^ //	回退到上上个版本以此类推
	HEAD~100 //	回退到100版本
	git reset 版本号（可不写全）	//	在未关闭窗口的情况下可恢复版本
 */
git reflog	//	查看命令历史，以便确定要回到未来的哪个版本。
提交后，用git diff HEAD -- readme.txt命令可以查看工作区和版本库里面最新版本的区别
git checkout -- fileName //	把fileName文件在工作区的修改全部撤销