class naive{
	public static void main(String args[]){
		char a[]={'b','a','n','a','n','a'};
		char b[]={'n','a'};
		match(a,b);
		}
		
	static void match(char a[],char b[]){
		int q=a.length;
		int w=b.length;
		
		for(int i=0;i<q-w;i++){
			int j=0;
			while(j<w && b[j]==a[j+i]){
				if(j==w-1){
					System.out.println("pattern matching in shift "+(i+1));
				}
				j++;
			}
		}
	}
}