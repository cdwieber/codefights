# From Project Euler
# Return the sum of all numbers *below* 1000 which are multiples of 3 or 5

numbers = []

for i in 0..999
	if i % 3 == 0 || i % 5 == 0
		numbers.push(i)
	end
end

solution = numbers.inject(0, &:+)

puts "Solution: " + solution.to_s